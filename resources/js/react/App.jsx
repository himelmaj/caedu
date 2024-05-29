import { BrowserRouter, Routes, Route, Navigate } from "react-router-dom";
import StudentCalendar from "./components/StudentCalendar";
import AdminCalendar from "./components/AdminCalendar";
import React from "react";

function App(props) {
    const { data } = props;
    return (
        <BrowserRouter>
            <div className="container mx-auto">
                <Routes>
                    <Route path="/student/calendar" element={<StudentCalendar data={data}/>}></Route>
                    <Route path="/admin/calendar" element={<AdminCalendar  data={data} />}></Route>
                </Routes>
            </div>
        </BrowserRouter>
    );
}

export default App;
