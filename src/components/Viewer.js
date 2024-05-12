import React from 'react';
import './x3dom.css';

function Viewer({ selectedObject, wireframeMode }) {
    return (
        <div className="viewer">
            <x3d width="500px" height="500px">
                <scene>
                    <inline url={`models/object${selectedObject}.x3d`} />
                    {/* Add logic to toggle wireframe mode */}
                    {wireframeMode && <appearance><wireframe /></appearance>}
                </scene>
            </x3d>
        </div>
    );
}

export default Viewer;
