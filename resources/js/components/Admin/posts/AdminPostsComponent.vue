<template>
  <div>
    <div class="posts-content">
      <h1 class="section-title">掲示板</h1>
      <p>こちらは、現役部員から新入生や入部を検討中の方へ向けて部活の情報を提供していく掲示板です！コメントも出来るため気軽にどうぞ！<br><span class="caution">（※不適切なコメントはこちらで削除させていただきます。）</span>
      </p>
      <router-link :to="{name: 'posts.create'}">
        <button class="btn">新規作成</button>
      </router-link>
      <div class="posts">
        <div class="post-item" v-for="post in posts" :key="post.id">
          <p class="fz-l">{{ post.title }}</p>
          <p>{{ post.body }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
    }
  },
  mounted() {
    axios.get('/posts')
      .then(response => {this.posts = response.data});
  }
}
</script>

<style lang="scss" scoped>
.posts-content {
  max-width: 1070px;
  width: 80%;
  margin: 0 auto;
  position: relative;
  .posts {
    border: 2px solid #eee;
    .post-item {
      padding: 10px 15px;
      box-sizing: border-box;
      &:not(:last-child) {
        border-bottom: 1px solid #eee;
      }
    }
  }
  .btn {
    position: absolute;
    right: 5px;
    top: 5px;
  }
}


</style>