<template>
  <div>
    <p>{{ post.title }}</p>
    <p>{{ post.body }}</p>
  </div>
</template>

<script>
export default {
  props: {
    postId: Number
  },
  data() {
    return {
      post: {}
    }
  },
  methods: {
    getPost() {
      axios.get('/api/posts/' + this.postId)
        .then((response) => {
          this.post = response.data;
        });
    }
  },
  mounted() {
    this.getPost();
  }
}
</script>

<style lang="scss" scoped>

</style>