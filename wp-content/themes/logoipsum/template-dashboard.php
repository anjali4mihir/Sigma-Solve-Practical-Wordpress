<?php
/*
Template Name: Dashboard
*/
get_header(); ?>
<div class="dashboard-main flex w-full">
    <?php get_template_part('dashboard-sidebar'); ?>
    <div class="min-h-screen p-7 2xl:p-8 w-full dashboard-right-section pl-[3.625rem] 2xl:pl-[4.625rem]">
        <!-- Main Header Section -->
        <div class="flex justify-between items-center">
            <div class="dashboard-header">
                <h1 class="text-2xl 2xl:text-3xl font-semibold">Dashboard</h1>
                <p class="date-time text-md 2xl:text-lg text-gray-500 py-1.5">4:46 pm | Jan 2022</p>
            </div>
            <div class="flex items-center gap-4 header-right-section">
                <!-- Search Bar -->
                <div class="relative search-bar">
                    <input type="text" placeholder="Search" class="text-sm pr-4 py-5 border-0 rounded-xl focus:outline-none pl-16">
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <img src="wp-content/uploads/2024/12/search-normal.png">
                    </span>
                </div>
                <!-- Notification Dropdown -->
                <div class="relative">
                    <button id="notification-btn" class="notification-btn p-3 2xl:p-2 rounded-md bg-white relative">
                        <img class="w-6 2xl:w-8 h-6 2xl:h-8" src="wp-content/uploads/2024/12/notification.png" alt="Notification">
                        <span class="absolute top-2.5 right-2.5 2xl:top-3.5 2xl:right-3.5 text-white text-xs w-3.5 2xl:w-4 h-3.5 2xl:h-4 flex items-center justify-center rounded-full">3</span>
                    </button>
                    <div id="notification-dropdown" class="hidden absolute right-0 mt-2 w-64 bg-white shadow-lg rounded-lg z-10">
                        <ul class="p-4 space-y-2">
                            <li class="text-sm">New message received</li>
                            <li class="text-sm">Server update available</li>
                            <li class="text-sm">Scheduled maintenance at 10 PM</li>
                        </ul>
                    </div>
                </div>

                <!-- Admin Profile Dropdown -->
                <div class="relative">
                    <button id="profile-btn" class="flex items-center gap-1 2xl:gap-2 focus:outline-none">
                        <span class="text-md 2xl:text-xl font-bold">Admin</span>
                        <!-- <img src="<?php echo get_avatar_url(get_current_user_id()); ?>" alt="Admin Avatar" class="w-8 h-8 rounded-full"> -->
                         <!--Currently I m comment dynamic code due to match with design kindly consider it-->
                        <img src="wp-content/uploads/2024/12/user-img.png" alt="User image" class="w-14 2xl:w-16 h-14 2xl:h-16 object-cover object-center ml-1.5 2xl:ml-4">
                    </button>
                    <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg z-10">
                        <ul class="p-4 space-y-2">
                            <li><a href="#" class="block text-sm text-gray-700">Profile</a></li>
                            <li><a href="<?php echo wp_logout_url(); ?>" class="block text-sm text-gray-700">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-4 gap-6 2xl:gap-11 mt-6 top-boxes-section">
            <?php 
            $stats = [
                ['image' => 'http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/from-social.png" alt="From Social>', 'label' => 'From Social',  'label' => 'From Social', 'count' => 20, 'trend' => 'up', 'percentage' => '12%'],
                ['image' => 'http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/stretch-zone.png" alt="Stretch Zone>','label' => 'From Website', 'count' => 96, 'trend' => 'down', 'percentage' => '9.2%'],
                ['image' => 'http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/total-leads.png" alt="Total Leads>','label' => 'Total Leads', 'count' => 187, 'trend' => 'up', 'percentage' => '6.4%'],
                ['image' => 'http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/total-agencies.png" alt="Total Agencies>','label' => 'Total Agencies', 'count' => 50, 'trend' => 'up', 'percentage' => '8.8%']
            ];
            ?>
            <?php foreach ($stats as $stat): ?>
                <div class="bg-white p-4 2xl:p-7 rounded-2xl chart-boxes">
                    <img class="icon-img" src="<?php echo $stat['image']; ?>">
                    <h2 class="text-md 2xl:text-xl font-medium pt-2.5 2xl:pt-5"><?php echo $stat['label']; ?></h2>
                    <p class="text-xl 2xl:text-3xl font-bold mt-1.5 2xl:mt-2 count-big"><?php echo $stat['count']; ?></p>
                    <p class="text-base 2xl:text-lg mt-3 2xl:mt-5 flex trend-section align-center">
                        <?php echo $stat['trend'] === 'up' ? '<img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/trent-up.png" alt="Trent Up">' : '<img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/trend-down.png" alt="Trent Down">'; ?><?php echo $stat['percentage']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Location Leads Table -->
        <div class="leads-update-list flex gap-6 2xl:gap-12 w-full">
            <div class="bg-white py-4 px-4 2xl:py-8 2xl:px-9 rounded-2xl shadow-md mt-6 w-[74.5%] 2xl:w-[82.5%]">
                <div class="leads-list-header flex">
                    <div class="flex-col">
                        <h2 class="text-xl 2xl:text-3xl">Location Leads List </h2>
                        <p class="text-sm 2xl:text-lg font-normal mt-1 2xl:mt-1.5"> lorem ipsum team dolor sit amet </p>
                    </div>
                    <div class="relative ml-auto search-section">
                        <input type="text" placeholder="Search.." class="focus:outline-none">
                        <span class="absolute transform -translate-y-1/2">
                            <i class="li-sear-icon text-2xl"></i>
                        </span>
                    </div>
                </div>
                <!-- Filters and Search -->
                <div class="flex justify-between mt-6 2xl:mt-8 filter-section w-full">
                    <div class="flex gap-3 2xl:gap-4">
                        <select class="p-1 2xl:p-2 border rounded-md">
                            <option>Division</option>
                        </select>
                        <select class="p-1 2xl:p-2 border rounded-md">
                            <option>Location</option>
                        </select>
                        <div class="date-picker">
                            <input type="date" class="p-1 2xl:p-2 border rounded-md">
                        </div>
                    </div>
                    <div class="button">
                        <a href="#" class="o-button"><i class="li-export-icon"> </i> Export </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="border border-black/10 rounded-lg  w-full mt-[20px] 2xl:mt-[30px] w-full overflow-x-auto lg:overflow-hidden data-table">
                    <table class="table-auto w-full">
                        <thead class="">
                            <tr>
                            <th class="text-sm 2xl:text-base p-3 2xl:p-4 text-left bg-primary text-white rounded-l-lg  ">
                                <input type="checkbox" id="selectAllCheckbox" class="flex rounded-md border-solid border border-slate-300 h-[18px] w-[18px]"> 
                            
                            </th>
                            <th class="text-sm 2xl:text-base p-3 2xl:p-4 text-left bg-primary text-white">Location Id</th>
                            <th class="text-sm 2xl:text-base p-3 2xl:p-4 text-center bg-primary text-white ">Location Name</th>
                            <th class="text-sm 2xl:text-base p-3 2xl:p-4 text-center bg-primary text-white">Total leads</th>
                            <th class="text-sm 2xl:text-base p-3 2xl:p-4 text-center bg-primary text-white rounded-r-lg">From Social </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="p-3 2xl:p-4">
                                <input type="checkbox" class="checkboxes flex rounded-md border-solid border border-slate-300 h-[18px] w-[18px]">
                            </td>
                            <td class="p-3 2xl:p-4 p-4 text-left text-sm 2xl:text-base">13527</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">Stretch Zone - Scarsdale, NY</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">8</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">8</td>
                            </tr>
                            <tr>
                            <td class="p-3 2xl:p-4">
                            <input type="checkbox" class="checkboxes flex rounded-md border-solid border border-slate-300 h-[18px] w-[18px]">
                            </td>
                            <td class="p-3 2xl:p-4 p-4 text-left text-sm 2xl:text-base">14256</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">Stretch Zone - Paseo Verde, NV</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">5</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">5</td>
                            </tr>
                            <tr>
                            <td class="p-3 2xl:p-4">
                            <input type="checkbox" class="checkboxes flex rounded-md border-solid border border-slate-300 h-[18px] w-[18px]">
                            </td>
                            <td class="p-3 2xl:p-4 p-4 text-left text-sm 2xl:text-base">13527</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">Stretch Zone - Scarsdale, NY</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">8</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">8</td>
                            </tr>
                            <tr>
                            <td class="p-3 2xl:p-4">
                            <input type="checkbox" class="checkboxes flex rounded-md border-solid border border-slate-300 h-[18px] w-[18px]">
                            </td>
                            <td class="p-3 2xl:p-4 p-4 text-left text-sm 2xl:text-base">14256</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">Stretch Zone - Paseo Verde, NV</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">5</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">5</td>
                            </tr>
                            <tr>
                            <td class="p-3 2xl:p-4">
                            <input type="checkbox" class="checkboxes flex rounded-md border-solid border border-slate-300 h-[18px] w-[18px]">
                            </td>
                            <td class="p-3 2xl:p-4 p-4 text-centeleftr text-sm 2xl:text-base">13527</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">Stretch Zone - Scarsdale, NY</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">8</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">8</td>
                            </tr>
                            <tr>
                            <td class="p-3 2xl:p-4">
                            <input type="checkbox" class="checkboxes flex rounded-md border-solid border border-slate-300 h-[18px] w-[18px]">
                            </td>
                            <td class="p-3 2xl:p-4 p-4 text-left text-sm 2xl:text-base">14256</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">Stretch Zone - Paseo Verde, NV</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">5</td>
                            <td class="p-3 2xl:p-4 p-4 text-center text-sm 2xl:text-base">5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!--pagination-->
                <div class="pagination flex  flex-wrap gap-8 2xl:gap-10 justify-between items-start mt-6 2xl:mt-8 w-full w-full max-md:max-w-full">
                    <nav class="flex gap-7 items-start min-w-[240px] pagination-sec" aria-label="Pagination">
                    <button class="previous-page flex overflow-hidden gap-3 justify-center items-center pr-2.5 pl-2.5 rounded-lg border-gray-100 border-solid border-[1.151px] h-[37px] min-h-[37px] w-[37px]" aria-label="Previous page">
                        <i class="li-arrow-down object-contain my-auto w-[18px]"></i>
                    </button>
                    <div class="flex items-start text-sm font-semibold leading-relaxed whitespace-nowrap text-neutral-800 pagination-num">
                        <button class="overflow-hidden py-2 pr-4 pl-3.5 min-h-[37px] w-[37px] active" aria-current="page">1</button>
                        <button class="overflow-hidden py-2 pr-4 pl-3.5 min-h-[37px] w-[37px]">2</button>
                        <button class="overflow-hidden px-3.5 py-2 min-h-[37px] w-[37px]">3</button>
                        <span class="overflow-hidden px-3.5 py-2 min-h-[37px] w-[37px]">...</span>
                        <button class="overflow-hidden px-3 py-2 min-h-[37px] w-[37px]">10</button>
                    </div>
                    <button class="next-page flex overflow-hidden gap-3 justify-center items-center pr-2.5 pl-2.5 rounded-lg border-gray-100 border-solid border-[1.151px] h-[37px] min-h-[37px] w-[37px]" aria-label="Next page">
                    <i class="li-arrow-down object-contain my-auto w-[18px]"></i>
                    </button>
                    </nav>
                    <div class="flex gap-5 items-center text-sm font-medium leading-relaxed min-w-[240px]">
                    <p class="self-stretch my-auto text-zinc-600">Showing 1 to 8 of 50 entries</p>
                    <select id="show" name="show" class="block rounded-lg border-0 py-3 px-4 ring-1 ring-inset ring-[#dcdcdc] focus:ring-2 focus:ring-inset focus:ring-primary sm:max-w-xs sm:text-sm/6 text-darker ">
                        <option>Show 8</option>
                        <option>Show 16</option>
                        <option>Show 24 </option>
                    </select>
                    </div>
                </div>
            </div>

            <!-- Updates Section -->
            <div class="bg-white px-3 2xl:px-5 py-4 2xl:py-9 rounded-2xl shadow-md mt-6 w-[23.5%] 2xl:w-[24.5%] update-block">
                <h2 class="text-xl 2xl:text-3xl">Updates</h2>
                <p class="text-sm 2xl:text-base pt-1 2xl:pt-1.5"> lorem ipsum team dolor sit amet </p>
                <ul class="flex flex-col items-start mt-7 2xl:mt-12 min-h-[767px] max-md:mt-10 updates-list">
                    <li class="flex gap-4 2xl:gap-5 items-center updates-list dashboard-1">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/from-social.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                    <li class="flex gap-5 items-center updates-list dashboard-2 mt-4">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/stretch-zone.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                    <li class="flex gap-5 items-center updates-list dashboard-3 mt-4">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/total-leads.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                    <li class="flex gap-5 items-center updates-list dashboard-4 mt-4">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/total-agencies.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                    <li class="flex gap-5 items-center updates-list dashboard-1 mt-4">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/from-social.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                    <li class="flex gap-5 items-center updates-list dashboard-2 mt-4">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/stretch-zone.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                    <li class="flex gap-5 items-center updates-list dashboard-3 mt-4">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/total-leads.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                    <li class="flex gap-5 items-center updates-list dashboard-5 mt-4">
                        <div class="flex justify-center items-center">
                        <img src="http://localhost/Sigma-Solve-Practical/wp-content/uploads/2024/12/cubic-img.png" alt="Update Icon" class="object-contain my-auto">
                        </div>
                        <div class="flex flex-col my-auto">
                        <h3 class="text-md 2xl:text-lg font-medium leading-6 2xl:leading-9">Loream ipsum</h3>
                        <p class="text-sm 2xl:text-base leading-6 2xl:leading-9">lorem ipsum team dolor</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
