import moment from 'moment'
import Vue from 'vue'
Vue.filter('timeformat', (arg) => {
  return moment(arg).format("dddd, MMMM Do YYYY");
});


Vue.filter('shortlength', function (text, length, suffix) {
  return text.substring(0, length) + suffix;
});