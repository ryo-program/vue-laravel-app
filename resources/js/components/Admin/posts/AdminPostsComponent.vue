<template>
  <div>
    <div class="posts-content container">
      <h1 class="section-title">掲示板</h1>
      <p>こちらは、現役部員から新入生や入部を検討中の方へ向けて部活の情報を提供していく掲示板です！コメントも出来るため気軽にどうぞ！<br><span class="caution">（※不適切なコメントはこちらで削除させていただきます。）</span>
      </p>
      <router-link :to="{name: 'admin.post.create'}">
        <button class="btn new-post">新規作成</button>
      </router-link>
      <div class="posts">
        <div class="post-item" v-for="post in posts" :key="post.id">
          <p class="fz-l">{{ post.title }}</p>
          <p>{{ post.body }}</p>
          <router-link :to="{name: 'admin.post.show', params: {postId: post.id}}">
            <button class="btn">詳細</button>
          </router-link>
          <!-- <p>（{{ time(post.created_at) }}）</p> -->
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
  methods: {
    time(e) {
      let year = e.getFullYear();
      let month = e.getMonth() + 1;
      let date = e.getDate();
      let time =  year + "/" + month + "/" + date;
      return time;
    }
  },
  mounted() {
    axios.get('/api/posts')
      .then(res => {this.posts = res.data});
  },
}
</script>

<style lang="scss" scoped>
.posts-content {
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
  .new-post {
    position: absolute;
    right: 5px;
    top: 5px;
  }
}
</style>