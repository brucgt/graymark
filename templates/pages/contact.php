<!DOCTYPE html>
<html lang="en">

<head>
    <?php view('layouts/head') ?>
    <title>Contact Us</title>
</head>

<body>

    <?php view('layouts/header') ?>

    <div class="flex justify-center m-auto my-10 w-[80%] bg-slate-100 rounded-lg shadow-slate-400 shadow-md">
        <div class="hidden lg:flex lg:items-center lg:w-[60%] lg:p-2">
            <img class="w-full h-auto" src="<?= url('assets/img/company/logo/graymark-high-uality-logo-6x4-inches.png') ?>" alt="">
        </div>
        <form class="w-full px-5 py-3 lg:px-10 lg:py-5 lg:w-[40%]" action="<?= url('/contactfunc') ?>" method="POST">

            <?php if (isset($_SESSION['message'])) : ?>
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <?= $_SESSION['message'] ?>
                    </div>
                </div>
                <?php unset($_SESSION['message']) ?>
            <?php endif ?>

            <?php if (isset($_SESSION['errors'])) : ?>
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Danger</span>
                    <div>
                        <span class="font-medium">An Error Occured:</span>
                        <ul class="mt-1.5 ml-4 text-red-700 list-disc list-inside">
                            <?php foreach ($_SESSION['errors'] as $err) : ?>
                                <li><?= $err ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <?php unset($_SESSION['errors']) ?>
            <?php endif ?>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First Name</label>
                <input type="text" name="FirstName" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="<?= old('FirstName') ?>" required>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
                <input type="text" name="LastName" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="<?= old('LastName') ?>" required>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="text" name="E-Mail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="<?= old('E-Mail') ?>" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                <textarea name="Message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= old('Message') ?></textarea>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>

    <?php view('layouts/footer') ?>

</body>

</html>