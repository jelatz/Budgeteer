<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import FormInput from '@/Components/FormInput.vue';
defineOptions({
    layout: GuestLayout,
})
</script>

<template>
    <div class="border p-6 rounded">
        <form action="">
            <FormInput label="Email" type="text" inputType="text" containerClass="mb-2" />
            <FormInput label="Password" type="text" containerClass="mb-2" />
            <button class="bg-blue-500 text-white px-4 py-1 w-full mt-5 rounded">Login</button>
        </form>
        <Link href="/register" class="text-blue-500 font-md">Register</Link>
    </div>
</template>

<style scoped></style>