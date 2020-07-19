<template>
  <div>
    <div class="container">
      <h1 class="section-title">投稿の詳細</h1>
      <div class="post">
        <p class="fz-l">{{ post.title }}</p>
        <p>{{ post.body }}</p>
        <router-link :to="{name: 'admin.post.edit'}">
          <button class="btn">編集</button>
        </router-link>
        <button @click="deletePost()" class="btn delete-btn">削除</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    postId: String
  },
  data() {
    return {
      post: {}
    }
  },
  methods: {
    getPost() {
      axios.get('/api/posts/' + this.postId)
        .then((res) => {
          console.log(res);
          this.post = res.data;
        });
    },
    deletePost(id) {
      axios.delete('/api/posts/' + this.postId)
        .then((res) => {
          this.$router.push({name: 'admin.posts'})
        });
    }
  },
  mounted() {
    this.getPost();
  }
}
</script>

<style lang="scss" scoped>
.post {
  border: 2px solid #eee;
  padding: 10px 15px;
  position: relative;
}
.delete-btn {
  position: absolute;
  bottom: 8px;
  right: 8px;
}
</style>