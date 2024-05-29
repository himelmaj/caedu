import React from "react";

import FullCalendar from "@fullcalendar/react";
import dayGridPlugin from "@fullcalendar/daygrid";
import interactionPlugin from "@fullcalendar/interaction" 

const StudentCalendar = () => {



    const handleDateClick = (arg) => {
        alert(arg.dateStr)
      }
    return (
        <FullCalendar
        plugins={[ dayGridPlugin, interactionPlugin ]}
        dateClick={handleDateClick}
        initialView="dayGridMonth"
        initialEvents={
          [
            { title: "event 1", date: new Date() },
            { title: "event 2", date: new Date() }
          ]
        }
        // eventColor="#3788D8"
      />
    );
};

export default StudentCalendar;
