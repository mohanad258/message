   
   import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js";
   import { getAuth,GoogleAuthprovider, signInWithPopup} from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js";

   const firebaseConfig = {
    apiKey: "AIzaSyBLd76Aal51dS21TxiPyc0rDzVsnT7dAO8",
    authDomain: "message-athant.firebaseapp.com",
    projectId: "message-athant",
    storageBucket: "message-athant.firebasestorage.app",
    messagingSenderId: "487013828980",
    appId: "1:487013828980:web:733af6a09f0990f1f8c421"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth=getAuth(app);
  auth.langugeCode='en'
  const provider = new GoogleAuthprovider();
 const InsertUser=document.getElementById()
 