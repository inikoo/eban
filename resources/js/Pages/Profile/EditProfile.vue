<script setup>


import {
    UserCircleIcon,
} from '@heroicons/vue/24/outline'


const subNavigation = [
    { name: 'Profile', href: '#', icon: UserCircleIcon, current: true },
    /*{ name: 'Account', href: '#', icon: CogIcon, current: false },
    { name: 'Password', href: '#', icon: KeyIcon, current: false },
    { name: 'Notifications', href: '#', icon: BellIcon, current: false },
    { name: 'Billing', href: '#', icon: CreditCardIcon, current: false },
    { name: 'Integrations', href: '#', icon: SquaresPlusIcon, current: false },*/
]



import {useForm, usePage} from '@inertiajs/vue3'

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email
})




</script>

<template layout="AppLayout">

    <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="min-w-0 flex-1">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">Edit Profile</h1>
        </div>

    </div>

            <div class="mx-auto max-w-screen-xl px-4 pb-6 sm:px-6 lg:px-8 lg:pb-16">
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                        <aside class="py-6 lg:col-span-3">
                            <nav class="space-y-1">
                                <a v-for="item in subNavigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700' : 'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900', 'group border-l-4 px-3 py-2 flex items-center text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">
                                    <component :is="item.icon" :class="[item.current ? 'text-teal-500 group-hover:text-teal-500' : 'text-gray-400 group-hover:text-gray-500', 'flex-shrink-0 -ml-1 mr-3 h-6 w-6']" aria-hidden="true" />
                                    <span class="truncate">{{ item.name }}</span>
                                </a>
                            </nav>
                        </aside>

                        <form class="divide-y divide-gray-200 lg:col-span-9" @submit.prevent="form.patch(route('profile.update'))">
                            <!-- Profile section -->
                            <div class="py-6 px-4 sm:p-6 lg:pb-8">
                                <div>
                                    <h2 class="text-lg font-medium leading-6 text-gray-900">Profile</h2>
                                    <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                                </div>

                                <div class="mt-6 flex flex-col lg:flex-row">
                                    <div class="flex-grow space-y-6">
                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                                            <div class="mt-1">
                                                <textarea id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm" />
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p>
                                        </div>
                                    </div>

                                    <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-shrink-0 lg:flex-grow-0">
                                        <p class="text-sm font-medium text-gray-700" aria-hidden="true">Photo</p>
                                        <div class="mt-1 lg:hidden">
                                            <div class="flex items-center">
                                                <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full" aria-hidden="true">
                                                    <img class="h-full w-full rounded-full" :src="user.imageUrl" alt="" />
                                                </div>
                                                <div class="ml-5 rounded-md shadow-sm">
                                                    <div class="group relative flex items-center justify-center rounded-md border border-gray-300 py-2 px-3 focus-within:ring-2 focus-within:ring-sky-500 focus-within:ring-offset-2 hover:bg-gray-50">
                                                        <label for="mobile-user-photo" class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700">
                                                            <span>Change</span>
                                                            <span class="sr-only"> user photo</span>
                                                        </label>
                                                        <input id="mobile-user-photo" name="user-photo" type="file" class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="relative hidden overflow-hidden rounded-full lg:block">
                                            <img class="relative h-40 w-40 rounded-full" :src="user.imageUrl" alt="" />
                                            <label for="desktop-user-photo" class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100">
                                                <span>Change</span>
                                                <span class="sr-only"> user photo</span>
                                                <input type="file" id="desktop-user-photo" name="user-photo" class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0" />
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 grid grid-cols-12 gap-6">
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input v-model="form.name" type="text" name="first-name" id="first-name" autocomplete="given-name"  class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                                    </div>

                                    <div class="col-span-12">
                                        <label for="url" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input v-model="form.email"  type="text" name="url" id="url" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                                    </div>
                                </div>
                            </div>

                            <!-- Privacy section -->
                            <div class="divide-y divide-gray-200">
                                <div class="mt-4 flex justify-center py-4 px-4 sm:px-6">
                                    <button type="button" class="inline-flex justify-center rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Cancel</button>
                                    <button type="submit" data-test="save" class="ml-5 inline-flex justify-center rounded-md border border-transparent bg-sky-700 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</template>


