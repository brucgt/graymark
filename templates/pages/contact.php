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
        <form class="w-full px-5 py-3 lg:px-10 lg:py-5 lg:w-[40%]">
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First Name</label>
                <input type="text" id="fname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
                <input type="text" id="lname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>

    <?php view('layouts/footer') ?>

</body>

</html>