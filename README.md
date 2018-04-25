# bizsys
<h2>AdminLTD template integrated and make it ready to use for Yii developer</h2>

<h3>Scenerio</h3>
<p>When developing web application for business, it become requirement to support for multiple screen, such as desktop, tablet and mobile device. Themeing to cater such usecase are highly time consuming. AdminLTE is a responsive HTML template that can cater for responsive web design. The source code provide fully integration of this theme with Yii framework version one.</p>

<h3>Target</h3>
<p>For Yii framework one developer who would like to change theme for the existing application that can support responsive web design. Since there are not many source code we can find for ready made responsive theme integration for Yii framework version one, this source will help legacy Yii app to different look and feel.</p>

<h3>Installation</h3>
<ol>
  <li>copy /themes/adminlte/views folder and its contents</li>
  <li>copy bower_components, dist, plugins folder from AdminLTE theme to /themes/adminlte/</li>
  <li>under /protected/config/main.php, just change theme to 'adminlte'</li>
</ol>

<h3>Tips</h3>
<p>If themes not loaded fully, open Chrome or Mozilla inspector window trace for wrong pointing directory path.</p>
