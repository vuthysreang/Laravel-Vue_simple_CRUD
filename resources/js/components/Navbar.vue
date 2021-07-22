<template>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <nav class="bg-gray-800">
    <div class="flex p-4 mx-10 space-x-5">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <router-link
        to="/"
        class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-lg font-medium"
      >
        Home
      </router-link>

      <router-link
        to="/about"
        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-lg font-medium"
      >
        About
      </router-link>
    </div>
  </nav>
</template>

<script>
export default {};
</script>

<style>
/* Style css here */
</style>
