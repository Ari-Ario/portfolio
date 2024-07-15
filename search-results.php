<?php


if (session_status() === PHP_SESSION_NONE){
    session_start();
}

// Redirect to root if no search query is set
if (!isset($_POST['search']) && !isset($_SESSION['search_query'])) {
    header("Location: /index.php");
    exit();
}

// List of searchable pages
$pages = [
    "cv" => "./cv/cv.php",
    "home" => "./index.php",
    "about" => "./about/about.php",
    "film" => "./film/index-film.php",
    "quiz" => "./quiz/index-quiz.php",
    "form" => "./signup-form/index-form.php",
    "contact" => "./contact/contact.php",
    "lebenslauf" => "./cv/lebenslauf.php",

    "kleinhaendler" => "https://kleinhaendler.ch/",
    // Add more pages as needed
];

// Initialize search result variable
$search_result = false;
$search_query = '';

// Check if search query is set in session storage
if (isset($_POST['search'])) {
    // Retrieve search query from POST request
    $search_query = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
    $_SESSION['search_query'] = $search_query;
} else {
    // Retrieve search query from session
    $search_query = isset($_SESSION['search_query']) ? $_SESSION['search_query'] : '';
}

if ($search_query) {
    // Check if the search query matches any page
    foreach ($pages as $key => $url) {
        if (strcasecmp($key, $search_query) == 0) {
            $search_result = $url;
            break;
        }
    }

    if ($search_result !== false) {
        // Found a matching page
        // Determine if it's an external URL or an internal path
        if (filter_var($search_result, FILTER_VALIDATE_URL)) {
            header("Location: " . htmlspecialchars($search_result));
        } else {
            header("Location: " . htmlspecialchars($search_result, ENT_QUOTES, 'UTF-8'));
        }
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="../styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .search-result a {
            text-decoration: none;
            color: #007bff;
        }
        .search-result a:hover {
            text-decoration: underline;
        }
        .not-found {
            color: red;
            font-weight: bold;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<header >
        <?php include_once "./components/header.php" ?>
</header>
<body>

    <div class="container">
        <h1>Search Results</h1>
        <div class="search-result">
            <?php if ($search_query && !$search_result): ?>
                <p class="not-found">Not found</p>
                <p>Other pages you can search:</p>
                <ul>
                    <?php foreach ($pages as $page_name => $page_link): ?>
                        <li><a href="<?php echo htmlspecialchars($page_link); ?>"><?php echo htmlspecialchars(ucfirst($page_name)); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php elseif (!$search_query): ?>
                <p>Please enter a search query.</p>
                <ul>
                    <?php foreach ($pages as $page_name => $page_link): ?>
                        <li><a href="<?php echo htmlspecialchars($page_link); ?>"><?php echo htmlspecialchars(ucfirst($page_name)); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    <footer>
        <?php include_once "./components/footer.php" ?>
    </footer>
</body>
<script src="/script.js"></script>

</html>
