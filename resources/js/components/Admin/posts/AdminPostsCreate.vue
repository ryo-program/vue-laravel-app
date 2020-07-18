<template>
  <div>
    <div class="container">
      <h1 class="section-title">投稿の新規作成</h1>
      <form @submit.prevent="addPost" class="post-create">
        <p>タイトル</p>
        <input type="text" v-model="post.title">
        <p>詳細</p>
        <textarea id="" v-model="post.body"></textarea>
        <input class="btn" type="submit" value="送信">
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      post: {},
    }
  },
  methods: {
    addPost() {
      axios.post('/api/posts', this.post)
        .then((res) => {
          this.$router.push({name: 'admin.posts'});
        });
    }
  }
}
</script>

<style lang="scss" scoped>
.post-create {
  margin: 0 auto;
  border: 2px solid #eee;
  padding: 10px 15px;
  width: 80%;
}
input, textarea {
  width: 100%;
}
</style>