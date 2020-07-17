<template>
  <div>
    
    <router-link :to="{name: 'user.posts'}">
      <button>掲示板</button>
    </router-link>
    <router-link :to="{name: 'user.posts'}">
      <button>Q&A</button>
    </router-link>
    <router-link :to="{name: 'user.posts'}">
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
  background: none;
  &:hover {
    opacity: 0.7;
  }
}
</style>