import React from 'react'
import ReactDOM from 'react-dom';
import firebase from 'firebase/app';
import 'firebase/firestore';
import { FirestoreProvider } from 'react-firestore';
import Home from './home';

const config = {
    apiKey: "AIzaSyBsTpMjxGaxO5wgjojRt28NwLqe7b4sSak",
    authDomain: "telbel.firebaseapp.com",
    databaseURL: "https://telbel.firebaseio.com",
    projectId: "telbel",
    storageBucket: "telbel.appspot.com",
    messagingSenderId: "354507874547"
};

firebase.initializeApp(config);
firebase.firestore().settings({timestampsInSnapshots: true});

if (document.getElementById('example')) {
    ReactDOM.render(
        <FirestoreProvider firebase={firebase}>
            <Home />
        </FirestoreProvider>,
        document.getElementById('example'));
}
