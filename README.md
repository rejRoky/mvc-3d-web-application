# coke 3d App
This is a 3D coke can model created using Blender and Three.js. The model is rendered in a web page using Three.js. The model can be rotated and zoomed in/out using the mouse. The model can also be viewed in VR mode using a VR headset.

# Project Structure
```
my-coca-cola-brand/
  |- src/
      |- components/
          |- Header.js
          |- Controls.js
          |- Description.js
          |- Viewer.js
      |- assets/
          |- models/
              |- object1.x3d
              |- object2.x3d
              |- object3.x3d
          |- textures/
              |- texture1.jpg
              |- texture2.jpg
              |- texture3.jpg
      |- App.js
      |- index.js
  |- public/
      |- index.html
  |- package.json
  |- README.md
```

# How to run the project

1. Clone the repository
2. Run `npm install` to install the dependencies
3. Run `npm start` to start the development server
4. Open `http://localhost:3000` in your browser
5. You should see the 3D coke can model rendered in the web page
6. You can rotate and zoom in/out the model using the mouse