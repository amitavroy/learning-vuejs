import Vue from 'vue';
import Vuex from 'vuex';

import todoStore from './../components/Todo/todoStore';

Vue.use(Vuex);
Vue.config.debug = true;

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        todoStore
    },
    strict: debug
});
