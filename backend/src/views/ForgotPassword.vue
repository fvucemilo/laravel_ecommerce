<template>
    <GuestLayout title="Forgot your password">
        <form method="POST" action="#" class="mt-8 space-y-6">
            <input type="hidden" name="remember" value="true"/>
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required=""
                           class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Email address"/>
                </div>

            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center"></div>
                <div class="text-sm">
                    <router-link :to="{name: 'login'}" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Sign in
                    </router-link>
                </div>
            </div>
            <div>
                <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                          <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                          aria-hidden="true"/>
                        </span>
                    Submit
                </button>
            </div>
        </form>
    </GuestLayout>
</template>

<script setup lang="ts">
import GuestLayout from "../components/GuestLayout.vue";
import {LockClosedIcon} from "@heroicons/vue/solid";
</script>
