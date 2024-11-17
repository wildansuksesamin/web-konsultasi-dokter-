<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body class="bg-[#FFF5EC] font-poppins">

    <div>
        <h1 class="text-center text-4xl font-bold mt-10">Choose Role</h1>
        <p class="text-center px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, odit?</p>
    </div>

    <div class=" md:flex sm:flex-wrap sm:justify-center  sm:mx-3  ">
        <div
            class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[340px] mt-3   h-[500px]   mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 px-5 sm:pt-8 md:pt-6 xl:pt-5 ">
                <div>
                    <h5 class="mb-4 text-3xl font-bold  px-[100px]">User</h5>
                    <!-- List -->
                    <ul role="list" class="my-7 space-y-5">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Build your team</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Manage team</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Hire members</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Team Chat</span>
                        </li>

                        <li class="flex space-x-3 line-through decoration-gray-500">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 " fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500">Join team</span>
                        </li>
                        <li class="flex space-x-3 line-through decoration-gray-500">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 " fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500">Complete
                                documentation</span>
                        </li>
                        <li class="flex space-x-3 line-through decoration-gray-500">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 " fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500">24×7 phone & email
                                support</span>
                        </li>
                    </ul>
                    <form action="{{url('/choose-role')}}" method="POST">
                        @csrf
                        <input type="hidden" name="role" id="role">
                        <button type="submit" onclick="setRoles('user')"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center text-center">Choose
                            plan</button>


                </div>
            </div>
        </div>

        <div
            class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[340px] mt-3   h-[500px]   mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 px-5 sm:pt-8 md:pt-6 xl:pt-5 hover:text-white">
                <div class="hover:text-white">
                    <h5 class="mb-4 text-3xl font-bold  px-[100px]">Dokter</h5>
                    <!-- List -->
                    <ul role="list" class="my-7 space-y-5 hover:text-white">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 " fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Konsultasi</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Team Chat</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Search Team</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ">Find a job</span>
                        </li>
                        <li class="flex space-x-3 line-through decoration-gray-500">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500">Build your team</span>
                        </li>
                        <li class="flex space-x-3 line-through decoration-gray-500">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500">Manage team</span>
                        </li>
                        <li class="flex space-x-3 line-through decoration-gray-500">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Check icon</title>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500">Hire members</span>
                        </li>
                    </ul>

                    <button type="submit" onclick="setRoles('dokter')"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center text-center">Choose
                        plan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

    <script>
        function setRoles(role){
      document.getElementById('role').value = role;
    }
    </script>
</body>

</html>