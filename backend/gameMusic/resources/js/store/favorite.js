const state = {
  isFavorite: false,
  favoriteAudios: []
}

const getters = {}

const mutations = {
  setIsFavorite(state, data) {
    state.isFavorite = data.is_favorite
  },
  setFavoriteAudios(state, data) {
    state.favoriteAudios = data.favorite_audios
  },
}

const actions = {
   // お気に入り登録
   async store({ commit }, id) {
    await axios.post(`/api/audio/${id}/favorite`)
    .then(res => {
      // console.log(res.data);
    })
    .catch(e => {
      console.log(e);
    })
  },
   // お気に入り解除
   async delete({ commit }, id) {
    await axios.post(`/api/audio/${id}/unfavorite`)
      .then(res => {
        // console.log(res.data);
      })
      .catch(e => {
        console.log(e);
      })
  },
   // お気に入り済かどうか確認
   async isFavorite({ commit }, id) {
    await axios.post(`/api/audio/${id}/isfavorite`)
      .then(res => {
        // console.log(res.data);
        commit('setIsFavorite', res.data)
      })
      .catch(e => {
        console.log(e);
      })
  },
   // お気に入り一覧取得
   async lists({ commit }) {
    await axios.get(`/api/favoriteLists`)
      .then(res => {
        console.log(res.data);
        commit('setFavoriteAudios', res.data)
      })
      .catch(e => {
        console.log(e);
      })
  },
}



export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}