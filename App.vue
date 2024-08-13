<template>
  <div id="app">
    <Login v-if="!isLoggedIn" />
    <Quiz v-else />
  </div>
</template>

<script>
import Login from "./components/Login.vue";
import Quiz from "./components/Quiz.vue";

export default {
  components: { Login, Quiz },
  data() {
    return {
      isLoggedIn: false,
    };
  },
  created() {
    // Check if user is logged in
    this.isLoggedIn = !!sessionStorage.getItem("user");
  },
};
</script>
