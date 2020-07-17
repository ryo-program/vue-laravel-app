<template>
  <div>
    <router-link :to="{name: 'admin.home'}">
      <button>庭球大学</button>
    </router-link>
    <router-link :to="{name: 'admin.posts'}">
      <button>掲示板</button>
    </router-link>
    <router-link :to="{name: 'admin.qa'}">
      <button>Q&A</button>
    </router-link>
    <router-link :to="{name: 'admin.members'}">
      <button>メンバー紹介</button>
    </router-link>
  </div>
</template>

<script>
export default {
  
}
</script>

<style lang="scss" scoped>
button {
  border: none;
  outline: 0ch;
  background: none;
  &:hover {
    opacity: 0.7;
  }
}
</style>