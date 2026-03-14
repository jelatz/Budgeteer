<script setup>
defineProps({
    label: String,
    type: String,
    inputType: String,
    options: Array,
    error: String,
    containerClass: String,
})
</script>

<template>
    <div :class="containerClass">
        <!-- Label -->
        <label :for="label" class="font-bold">{{ label }} :</label>

        <!-- Input -->
        <input :id="label" :inputType="type" :name="label" v-if="type === 'text'"
            class="border w-full rounded-md py-1 px-2" />

        <!-- Select -->
        <select :id="label" :name="label" v-if="type === 'select'" class="border w-full py-1 px-2 rounded-md">
            <option value="">-- Select --</option>
            <option v-for="option in options" :key="option.value" :value="option.value">{{ option.label }}</option>
        </select>

        <!-- TextArea -->
        <textarea :id="label" :name="label" v-if="type === 'textarea'"></textarea>

        <!-- Error -->
        <span v-if="error" class="text-red-500">{{ error }}</span>
    </div>
</template>

<style lang="scss" scoped></style>