<?php require 'templates/header.html' ?>
<?php require 'templates/nav.php' ?>
<?php require 'templates/banner.php' ?>
<?php
$errors = $_SESSION['error'] ?? [];
unset($_SESSION['error']);
?>
<main>
        <div class="mx-auto mb-10 max-w-7xl py-6 sm:px-6 lg:px-8">
                <form class="max-w-sm mx-auto" method="post" action="">
                        <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input type="text" id="email" name="title"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="You can leave it empty">
                        </div>
                        <div class="mb-5">
                                <label for="message"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                        text</label>
                                <textarea id="message" name="content" rows="4"
                                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="Start typing..."></textarea>
                        </div>
                        <button type="submit"
                                class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Create
                        </button>
                </form>
        </div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column">
            <?php if (!empty($errors)): ?>
                <?php foreach ($errors as $error): ?>
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                 role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                            <span class="font-medium">Validation error!</span> <?= $error; ?>
                                    </div>
                            </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
</main>

<?php require 'templates/footer.html' ?>



