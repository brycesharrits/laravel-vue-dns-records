<template>
  <div>
    <input class="form-control" type="text" v-model="url" placeholder="Enter URL"/>
    <div class="btn btn-primary" @click="getDnsRecords">Get DNS Records</div>
    <div v-for="record in records">
      <p>{{ record }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      url: '',
      records: [],
    };
  },
  methods: {
    getDnsRecords() {
      axios.post('/dns', {
        url: this.url
      })
        .then(response => {
          console.log(response.data);
          this.records = response.data;
        });
    }
  }
};
</script>