function onSignIn(googleUser) {
  const profile = googleUser.getBasicProfile();
  const id = profile.getId();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  const name = profile.getName();
  console.log('Name: ' + profile.getName());
  const img =  profile.getImageUrl();
  console.log('Image URL: ' + profile.getImageUrl());
  const email = profile.getEmail();
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
    console.log('User signed out.');
  });
}