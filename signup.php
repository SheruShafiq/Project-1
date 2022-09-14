
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Log in</title>
</head>

<body>
    <section class="bg-white p-10 rounded-xl max-w-md mx-auto mt-8 border">
        <h1 class="text-3xl font-bold mb-6">Sign up</h1>
        <form action="signupcheck.php" method="POST">
            <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-gray-700">Username</label>
                <input type="username" name="username" id="username" class="border p-2 w-full rounded" />
            </div>
            <div class="mb-6">
                <label for="ema1il" class="block mb-2 uppercase font-bold text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="border p-2 w-full rounded" />
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="border p-2 w-full rounded" />
            </div>
            <div class="mb-6">
                <button type="submit" name="save" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-600">
                    Sign up
                </button>
                <a href="./login.php" class="text-blue-500 hover:underline">Sign in</a>
            </div>
            <?php
            session_start();
            if (isset($_SESSION['Error'])) {
                echo '<p class="text-red-500">' . $_SESSION['Error'] . '</p>';
                unset($_SESSION['Error']);   
            }
            if (isset($_SESSION['Success'])) {
                echo '<p class="text-green-500">' . $_SESSION['Success'] . '</p>';
                unset($_SESSION['Success']);
            }
            ?>
        </form>
    </section>
</body>

</html>