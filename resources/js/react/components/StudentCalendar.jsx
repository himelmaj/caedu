import React, { useEffect, useState } from "react";

import FullCalendar from "@fullcalendar/react";
import dayGridPlugin from "@fullcalendar/daygrid";
import interactionPlugin from "@fullcalendar/interaction";
import timeGridPlugin from "@fullcalendar/timegrid";

const StudentCalendar = (props) => {
    const [events, setEvents] = useState([]);
    const { data } = props;

    useEffect(() => {
        const fetchData = async () => {
            await axios
                .get(`/student/appointments/receiver/${data.id}`)
                .then((response) => {
                    setEvents(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        };
        fetchData();
    }, []);

    return (
        <section className="bg-zinc-800 p-2 rounded-lg ">
            <FullCalendar
                plugins={[dayGridPlugin, interactionPlugin, timeGridPlugin]}
                initialView={"timeGridWeek"}
                headerToolbar={{
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay",
                }}
                allDaySlot={false}
                selectable={true}
                eventColor="#3788d8"
                events={events}
            />
        </section>
    );
};

export default StudentCalendar;
