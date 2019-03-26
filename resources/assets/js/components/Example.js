import React from 'react'
import ReactDOM from 'react-dom';
import firebase from 'firebase/app';
import 'firebase/firestore';
import { FirestoreProvider } from 'react-firestore';
import Home from './home';

const config = {
    apiKey: process.env.MIX_API_KEY,
    authDomain: process.env.MIX_AUTH_DOMAIN,
    databaseURL: process.env.MIX_DATABASE_URL,
    projectId: process.env.MIX_PROJECT_ID,
    storageBucket: process.env.MIX_STORAGE_BUCKET,
    messagingSenderId: process.env.MIX_MESSAGING_SENDER_ID
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
