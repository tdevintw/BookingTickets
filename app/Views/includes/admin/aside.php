<aside class="md:w-1/6 h-[90dvh] bg-green-500 -translate-x-[90px] md:-translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto dark:bg-gray-800">
        <ul class="h-full font-medium flex flex-col justify-between">
            <div class="space-y-2">
                <li>
                    <a href="#" class="home flex flex-row-reverse md:flex-row justify-between md:justify-normal items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
                        <div class="">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                        </div>
                        <div class="">
                            <span class="flex-1 m-0 md:ms-3 whitespace-nowrap">Home</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="<?= $_ENV['APP_URL'] . "/admin/dashboard" ?>" class="statistics flex flex-row-reverse md:flex-row justify-between gap-2 md:gap-0 md:justify-normal items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path d="M1 1V17C1 17.5304 1.21071 18.0391 1.58579 18.4142C1.96086 18.7893 2.46957 19 3 19H19" stroke="#ABB2BF" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 12L9 8L13 12L19 6" stroke="#ABB2BF" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 6H19V9" stroke="#ABB2BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="flex-1 m-0 md:ms-3 whitespace-nowrap">Statistics</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="users flex flex-row-reverse md:flex-row justify-between md:justify-normal items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 m-0 md:ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_ENV['APP_URL'] . "/admin/team/index" ?>" class="teams flex flex-row-reverse md:flex-row justify-between md:justify-normal items-center p-2 text--900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M10.5 2.5C10.5 3.16304 10.2366 3.79893 9.76777 4.26777C9.29893 4.73661 8.66304 5 8 5C7.33696 5 6.70107 4.73661 6.23223 4.26777C5.76339 3.79893 5.5 3.16304 5.5 2.5C5.5 1.83696 5.76339 1.20107 6.23223 0.732233C6.70107 0.263392 7.33696 0 8 0C8.66304 0 9.29893 0.263392 9.76777 0.732233C10.2366 1.20107 10.5 1.83696 10.5 2.5ZM15.5 3C15.5 3.53043 15.2893 4.03914 14.9142 4.41421C14.5391 4.78929 14.0304 5 13.5 5C12.9696 5 12.4609 4.78929 12.0858 4.41421C11.7107 4.03914 11.5 3.53043 11.5 3C11.5 2.46957 11.7107 1.96086 12.0858 1.58579C12.4609 1.21071 12.9696 1 13.5 1C14.0304 1 14.5391 1.21071 14.9142 1.58579C15.2893 1.96086 15.5 2.46957 15.5 3ZM2.5 5C3.03043 5 3.53914 4.78929 3.91421 4.41421C4.28929 4.03914 4.5 3.53043 4.5 3C4.5 2.46957 4.28929 1.96086 3.91421 1.58579C3.53914 1.21071 3.03043 1 2.5 1C1.96957 1 1.46086 1.21071 1.08579 1.58579C0.710714 1.96086 0.5 2.46957 0.5 3C0.5 3.53043 0.710714 4.03914 1.08579 4.41421C1.46086 4.78929 1.96957 5 2.5 5ZM4 7.25C4 6.56 4.56 6 5.25 6H10.75C11.44 6 12 6.56 12 7.25V12C12 13.0609 11.5786 14.0783 10.8284 14.8284C10.0783 15.5786 9.06087 16 8 16C6.93913 16 5.92172 15.5786 5.17157 14.8284C4.42143 14.0783 4 13.0609 4 12V7.25ZM3 7.25C3 6.787 3.14 6.358 3.379 6H1.25C0.56 6 1.78381e-08 6.56 1.78381e-08 7.25V11C-4.66659e-05 11.4281 0.0915386 11.8513 0.268602 12.2411C0.445665 12.6309 0.704104 12.9782 1.02655 13.2599C1.34901 13.5415 1.728 13.7508 2.13807 13.8738C2.54813 13.9968 2.97978 14.0307 3.404 13.973C3.13645 13.3497 2.99898 12.6783 3 12V7.25ZM13 12C13 12.7 12.856 13.368 12.596 13.973C13.0202 14.0307 13.4519 13.9968 13.8619 13.8738C14.272 13.7508 14.651 13.5415 14.9734 13.2599C15.2959 12.9782 15.5543 12.6309 15.7314 12.2411C15.9085 11.8513 16 11.4281 16 11V7.25C16 6.56 15.44 6 14.75 6H12.621C12.861 6.358 13 6.787 13 7.25V12Z" />
                        </svg>

                        <span class="flex-1 m-0 md:ms-3 whitespace-nowrap">Teams</span>
                    </a>
                </li>
            </div>

            <div>
                <li>
                    <a href="#" class="flex flex-row-reverse md:flex-row justify-between md:justify-normal items-center p-2 text-gray-900 rounded-lg dark:text-white bg-gray-300 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 m-0 md:ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</aside>