# Web 3D Model Viewer using X3D and React

This project is a simple web 3D model viewer using X3D and React. The project uses the `react-x3d` library to render the
3D model in the web page. The 3D model is a Coca-Cola can model which can be rotated and zoomed in/out using the mouse.

# Project Structure

```
mvc-3d-web-application/
  |- src/
      |- components/
          |- Header.js
          |- Controls.js
          |- Description.js
          |- Viewer.js
      |- assets/
          |- models/
              |- Coca-Cola.x3d
              |- Sprite.x3d
              |- Dr-Pepper.x3d
          |- textures/
              |- Coca-Cola.jpg
              |- Sprite.jpg
              |- Dr-Pepper.jpg
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