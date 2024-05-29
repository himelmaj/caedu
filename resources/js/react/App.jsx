import { BrowserRouter, Routes, Route, Navigate } from "react-router-dom";
import Admin from "./pages/Admin";
import Student from "./pages/Student";
import React from "react";

function App() {
    return (
        <>
            <BrowserRouter>
                <div className="container mx-auto">
                    <Routes>
                        <Route
                            path="/student/calendar"
                            element={<Student />}
                        ></Route>
                        <Route
                            path="/admin/calendar"
                            element={<Admin />}
                        ></Route>
                    </Routes>
                </div>
            </BrowserRouter>
        </>
    );
}

export default App;
