<!--
  - Author: Raul Perusquia <raul@inikoo.com>
  - Created: Fri, 13 Jan 2023 14:44:27 Malaysia Time, Kuala Lumpur, Malaysia
  - Copyright (c) 2023, Inikoo Ltd
  -->

<script setup>
import {LockClosedIcon} from '@heroicons/vue/20/solid';
import {Head, Link, useForm} from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';

defineProps({
                status: String,
            });

const form = useForm({
                         email   : '',
                         password: '',
                         remember: false,
                     });

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

</script>

<template layout="UIMarketingLayout">
    <Head title="Log in"/>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"/>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    or
                    {{ ' ' }}
                    <Link :href="route('ui-marketing.auth.register')" class="font-medium text-indigo-600 hover:text-indigo-500">
                        register
                    </Link>
                </p>
            </div>
            <form class="mt-8 space-y-6" @submit.prevent="submit">
                <input type="hidden" name="remember" value="true"/>
                <div class="space-y-6 rounded-md shadow-sm">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input v-model="form.email" id="email-address" name="email" type="email" autocomplete="email" required=""
                               class="relative block w-full appearance-none  rounded-md border border-gray-500 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Email address"/>
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Password</label>
                        <label for="password" class="sr-only">Password</label>
                        <input v-model="form.password" id="password" name="password" type="password" autocomplete="current-password" required=""
                               class="relative block w-full appearance-none rounded-md border border-gray-500 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Password"/>

                    </div>

                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input v-model="form.remember" id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <Link :href="route('ui-marketing.auth.password.request')" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</Link>
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true"/>
            </span>
                        Sign in
                    </button>
                </div>
                <InputError class="mt-2" :message="form.errors.email"/>
                <InputError class="mt-2" :message="form.errors.password"/>
            </form>


            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>
        </div>
    </div>
</template>

