import React, { useState } from 'react';
import Header from './components/Header';
import Controls from './components/Controls';
import Description from './components/Description';
import Viewer from './components/Viewer';
import './App.css';

function App() {
    const [selectedObject, setSelectedObject] = useState(1);
    const [wireframeMode, setWireframeMode] = useState(false);
    const [description, setDescription] = useState('');

    const handleObjectSelection = (objectId) => {
        setSelectedObject(objectId);
        // Fetch object description based on objectId
        // setDescription(response.data.description);
    };

    const toggleWireframeMode = () => {
        setWireframeMode(!wireframeMode);
    };

    return (
        <div className="App">
            <Header />
            <Controls
                selectedObject={selectedObject}
                onObjectSelection={handleObjectSelection}
                wireframeMode={wireframeMode}
                onToggleWireframe={toggleWireframeMode}
            />
            <Description description={description} />
            <Viewer
                selectedObject={selectedObject}
                wireframeMode={wireframeMode}
            />
        </div>
    );
}

export default App;
