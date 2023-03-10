<script setup>
import {LockClosedIcon} from '@heroicons/vue/20/solid';
import {Head, Link, useForm} from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import {ref} from "vue";

const form = useForm({
                         name                 : '',
                         email                : '',
                         company              : '',
                         password             : '',
                         password_confirmation: '',
                         terms                : false,
                     });


const submit = () => {
    form.post(route('ui-marketing.auth.register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

const showForm = ref(false);
const companyEnabled = ref(false)

function showRegistration(type) {
    showForm.value = true;

    companyEnabled.value = type !== "personal";

}

</script>

<template layout="UIMarketingLayout">

    <div v-if="!showForm" class="flex min-h-full items-center justify-evenly py-12 px-4 sm:px-6 lg:px-8">
        <button class="bg-indigo-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" v-on:click="showRegistration('personal')">
            Personal
        </button>
        <button class="bg-indigo-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" v-on:click="showRegistration('company')">
            Company
        </button>
    </div>

    <Head title="Registration"/>
    <div class="flex min-h-full items-center justify-center py-4 px-4 sm:px-6 lg:px-8" v-if="showForm">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"/>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Register to your account</h2>
                <p class="mt-2 text-center text-sm text-gray-600">


                    <Link
                        :href="route('ui-marketing.auth.login')"
                        class="underline text-sm  text-indigo-600 hover:text-indigo-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Already registered?
                    </Link>


                </p>
            </div>
            <form class="mt-8 space-y-6" @submit.prevent="submit">

                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <label for="name" class="sr-only">name</label>
                        <input v-model="form.name" id="name" name="name" type="text" autocomplete="name" required=""
                               class="relative block w-full appearance-none rounded-md border border-gray-500 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Name"/>
                        <InputError class="mt-2" :message="form.errors.name"/>
                    </div>
                    <div class="pt-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Email address</label>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input v-model="form.email" id="email-address" name="email" type="email" autocomplete="email" required=""
                               class="relative block w-full appearance-none rounded-md border border-gray-500 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Email address"/>
                        <InputError class="mt-2" :message="form.errors.email"/>
                    </div>
                    <div class="pt-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Password</label>
                        <label for="password" class="sr-only">Password</label>
                        <input v-model="form.password" id="password" name="password" type="password" autocomplete="new-password" required=""
                               class="relative block w-full appearance-none rounded-md border border-gray-500 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Password"/>
                        <InputError class="mt-2" :message="form.errors.password"/>
                    </div>
                    <div class="pt-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <label for="password_confirmation" class="sr-only">Password</label>
                        <input v-model="form.password_confirmation" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required=""
                               class="relative block w-full appearance-none rounded-md border border-gray-500 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Confirm Password"/>
                        <InputError class="mt-2" :message="form.errors.password_confirmation"/>
                    </div>
                    <div v-if="companyEnabled" class="pt-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Company name</label>
                        <label for="company" class="sr-only">company</label>
                        <input v-model="form.company" id="company" name="company" type="text" autocomplete="company" required=""
                               class="relative block w-full appearance-none rounded-md border border-gray-500 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Company"/>
                        <InputError class="mt-2" :message="form.errors.company"/>
                    </div>
                    <div class="leading-9">
                        <input type="checkbox" name="terms" v-model="form.processing">
                        <label for="terms" ><a href="#" target="_blank"> Accept terms and conditions</a></label>
                    </div>
                </div>




                <div>
                    <button type="submit"
                            :disabled="!form.processing"
                            :class="{ 'opacity-25': !form.processing }"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true"/>
            </span>
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

</template>

