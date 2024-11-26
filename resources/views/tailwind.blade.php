<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 text-red-500">

    <header class="bg-white shadow-md">
        <nav class="flex justify-between items-center py-4 px-12">
            <img src="Logo.png" alt="Logo" class="font-bold text-green-500 text-xl">
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-600 hover:text-green-500">Home</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-500">Service</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-500">About</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-500">Blog</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-500">FAQ</a></li>
            </ul>
            <div>
                <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Get Started</button>
                <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 ml-4">Login</button>
            </div>
        </nav>
    </header>

    <main class="max-w-screen-xl mx-auto px-12 py-8">

        <!-- Hero Section -->
        <section class="flex justify-between items-center mb-16">
            <div class="flex-1 pr-16">
                <h1 class="text-4xl font-semibold mb-4">Lessons and insights <span class="text-green-500">from 8 years</span></h1>
                <p class="text-lg mb-4">Where to grow your business as a photographer: site or social media?</p>
                <button class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600">Register</button>
            </div>
            <div class="flex-1">
                <img src="Illustration.png" alt="Illustration of a person working on a computer" class="max-w-full">
            </div>
            <div class="flex justify-center mt-8 space-x-3">
                <span class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                <span class="w-2.5 h-2.5 bg-gray-300 rounded-full"></span>
                <span class="w-2.5 h-2.5 bg-gray-300 rounded-full"></span>
            </div>
        </section>

        <!-- Clients Section -->
        <section class="text-center mb-16">
            <h2 class="text-3xl text-red-500 mb-2">Our Clients</h2>
            <p class="text-lg text-red-500 mb-8">We have been working with some Fortune 500+ clients</p>
            <div class="flex justify-center items-center flex-wrap gap-8">
                <img src="Logo1.png" alt="Client 1" class="w-28">
                <img src="Logo2.png" alt="Client 2" class="w-28">
                <img src="Logo3.png" alt="Client 3" class="w-28">
                <img src="Logo4.png" alt="Client 4" class="w-28">
                <img src="Logo5.png" alt="Client 5" class="w-28">
                <img src="Logo6.png" alt="Client 6" class="w-28">
                <img src="Logo7.png" alt="Client 7" class="w-28">
            </div>
        </section>

        <!-- Community Section -->
        <section class="text-center mb-16">
            <h2 class="text-3xl text-red-500 mb-4">Manage your entire community in a single system</h2>
            <p class="text-lg text-red-500 mb-8">Who is Nextcent suitable for?</p>

            <div class="grid grid-cols-3 gap-12">
                <div class="text-center">
                    <img src="Icon1.png" alt="Membership Organizations" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl text-red-500 mb-4">Membership Organizations</h3>
                    <p class="text-gray-600">Our membership management software provides full automation of membership renewals and payments.</p>
                </div>
                <div class="text-center">
                    <img src="Icon2.png" alt="National Associations" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl text-red-500 mb-4">National Associations</h3>
                    <p class="text-gray-600">Our membership management software provides full automation of membership renewals and payments.</p>
                </div>
                <div class="text-center">
                    <img src="Icon3.png" alt="Clubs And Groups" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl text-red-500 mb-4">Clubs And Groups</h3>
                    <p class="text-gray-600">Our membership management software provides full automation of membership renewals and payments.</p>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="mb-16">
            <h2 class="text-3xl text-red-500 mb-8">Manage your entire community in a single system</h2>
            <div class="flex justify-between mb-16">
                <div class="w-1/2 pr-8">
                    <img src="Frame 35.png" alt="People interacting with a large screen" class="max-w-full">
                </div>
                <div class="w-1/2">
                    <h1 class="text-4xl font-semibold text-red-500 mb-4">The unseen of spending three years at Pixelgrade</h1>
                    <p class="text-lg text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet turpis ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta.</p>
                    <button class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600">Learn More</button>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="text-center bg-gray-200 py-16">
            <h1 class="text-4xl font-semibold text-red-500 mb-4">Helping a local <br><span class="text-green-500">business reinvent itself</span></h1>
            <p class="text-lg text-red-500 mb-8">We reached here with our hard work and dedication</p>
            <div class="flex justify-center space-x-12">
                <div class="flex items-center">
                    <img src="Icon3.png" alt="Members icon" class="w-10 h-10 mr-4">
                    <div>
                        <h2 class="text-2xl text-red-500">2,245,341</h2>
                        <p class="text-sm text-red-500">Members</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="Icon4.png" alt="Clubs icon" class="w-10 h-10 mr-4">
                    <div>
                        <h2 class="text-2xl text-red-500">46,328</h2>
                        <p class="text-sm text-red-500">Clubs</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="Icon5.png" alt="Event Bookings icon" class="w-10 h-10 mr-4">
                    <div>
                        <h2 class="text-2xl text-red-500">828,867</h2>
                        <p class="text-sm text-red-500">Event Bookings</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="Icon6.png" alt="Payments icon" class="w-10 h-10 mr-4">
                    <div>
                        <h2 class="text-2xl text-red-500">1,926,436</h2>
                        <p class="text-sm text-red-500">Payments</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
</html>