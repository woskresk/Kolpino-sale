let app = new Vue({
	el: '#app',
	data: {
		message: 'привет',
	},
	methods: {
		changeMessage: function() {
			this.message = 'пока';
		}
	}
});