<template>
  <div>
    <div v-for="post in posts" :key="post.id">
      <p>{{ post.title }}</p>
      <p>{{ post.body }}</p>
    </div>
    <router-link :to="{name: 'posts.create'}">
      <button>新規作成</button>
    </router-link>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
    }
  },
  // created() {
  //   this.fetchPosts();
  // },
  // methods: {
  //   fetchPosts() {
  //     this.$http.get('/api/posts')
  //     .then(res => {
  //       this.posts = res.data
  //     });
  //   }
  // }
  mounted() {
    axios.get('/posts')
      .then(response => {this.posts = response.data});
  }
}
</script>

<style lang="scss" scoped>

</style>