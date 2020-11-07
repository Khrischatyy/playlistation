 export default {

 	actions: {
 		updateUser ({ commit }, count) {
 			commit("updateCount", count)
 		},
 	},
 	mutations: {
 		updateCount(state, count) {
 			state.count = count
 		}
 	},
 	state: {
 		count : null
 	},
 	getters: {
 		countFunc(state) {
 			return state.count
 		}
 	}

 }