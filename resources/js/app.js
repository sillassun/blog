/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import AddArticle from './components/AddArticle';
import Axios from 'axios';
 new Vue({
    el: '#app',
    components: {
        AddArticle
    },
    data: {
        articles: []
    },
    methods: {
        pushNewArticle(r) {
            this.articles.unshift(r);
        }
    },
    mounted() {
        Axios.get('/dedicated-article')
        .then(r => this.articles = r.data)
        console.log(this.articles)
    }
});
