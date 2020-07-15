<template>
  <div>
    <h1>投稿の新規作成</h1>
    <form @submit.prevent="addPost">
      <section>
        <p>タイトル</p>
        <input type="text" v-model="post.title">
        <p>詳細</p>
        <textarea id="" v-model="post.body"></textarea>
      </section>
      <input @click="addPost" value="送信">
    </form>
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
      console.log(this.post);
      // const uri = '/api/admin/posts/create';
      // this.axios.post(uri, this.task).then((response) => {
      //   this.$router.push({name: 'posts'});
      // });
    }
  }
  // mounted() {
  //   axios.get('/admin/posts').then(response => console.log(response))
  // }
}
</script>

<style lang="scss">

</style>