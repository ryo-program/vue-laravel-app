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