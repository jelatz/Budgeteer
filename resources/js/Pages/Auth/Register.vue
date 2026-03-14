<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import FormInput from '@/Components/FormInput.vue';
import Logo from '@/Components/Logo.vue';
defineOptions({
    layout: GuestLayout,
})
</script>

<template>
    <div>
        <Logo class="mx-auto mb-7" />
        <div class="border p-6 rounded shadow-lg shadow-blue-900/50">
            <form action="">
                <FormInput label="Email" type="text" inputType="text" containerClass="mb-2" />
                <FormInput label="Password" type="text" containerClass="mb-2" />
                <button class="bg-blue-500 text-white px-4 py-1 w-full mt-5 rounded">Register</button>
            </form>
        </div>
        <div class="flex space-x-2 mt-2">
            <p>Already have an account?</p>
            <Link href="/" class="text-blue-500 font-md">Login Here</Link>
        </div>
    </div>
</template>

<style scoped></style>