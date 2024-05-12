import React from 'react';

function Controls({ selectedObject, onObjectSelection, wireframeMode, onToggleWireframe }) {
    return (
        <div className="controls">
            <button onClick={() => onObjectSelection(1)}>Object 1</button>
            <button onClick={() => onObjectSelection(2)}>Object 2</button>
            <button onClick={() => onObjectSelection(3)}>Object 3</button>
            <button onClick={onToggleWireframe}>
                {wireframeMode ? 'View Mode' : 'Wireframe Mode'}
            </button>
            {/* Add more buttons for camera views, lighting control, etc. */}
        </div>
    );
}

export default Controls;
