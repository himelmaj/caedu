import React, { useState } from "react";

import FullCalendar from "@fullcalendar/react";
import dayGridPlugin from "@fullcalendar/daygrid";
import interactionPlugin from "@fullcalendar/interaction";
import timeGridPlugin from "@fullcalendar/timegrid";
import { useForm } from "react-hook-form";
import dayjs from "dayjs";

import { CalendarDate, parseDate } from "@internationalized/date";
import {
    Modal,
    ModalContent,
    ModalHeader,
    ModalBody,
    ModalFooter,
    Button,
    useDisclosure,
    DateInput,
} from "@nextui-org/react";

const AdminCalendar = () => {
    const [events, setEvents] = useState([]);

    const [date, setDate] = useState("");

    const {
        register,
        handleSubmit,
        watch,
        formState: { errors },
    } = useForm();

    const handleDateClick = (arg) => {
        // alert(arg.dateStr);
        setDate(arg.dateStr);
        console.log(arg);
        onOpenChange();
    };

    const { isOpen, onOpen, onOpenChange } = useDisclosure();

    return (
        <>
            <FullCalendar
                plugins={[dayGridPlugin, timeGridPlugin, interactionPlugin]}
                initialView="timeGridWeek"
                headerToolbar={{
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay",
                }}
                events={events}
                dateClick={handleDateClick}
            />

            <Modal
                isOpen={isOpen}
                onOpenChange={onOpenChange}
                size="lg"
                className="bg-zinc-800 rounded-lg text-white"
            >
                <ModalContent>
                    {(onClose) => (
                        <>
                            <form action="">
                                <ModalHeader className="flex flex-col gap-1">
                                    Modal Title
                                </ModalHeader>
                                <ModalBody className="text-black">
                                    <input type="text" name="title" id="" />
                                    <textarea
                                        name="description"
                                        id=""
                                    ></textarea>
                                    <input
                                        type="datetime"
                                        name=""
                                        id=""
                                        value={dayjs(date).format(
                                            "DD/MM/YYYY HH:mm:ss"
                                        )}
                                    />
                                    <select name="" id="">
                                        <option value="900">15 minutos</option>
                                        <option value="1800">30 minutos</option>
                                        <option value="3600">1 hora</option>
                                    </select>
                                </ModalBody>
                                <ModalFooter>
                                    <Button
                                        color="danger"
                                        variant="light"
                                        onPress={onClose}
                                    >
                                        {date}
                                    </Button>
                                    <Button color="primary" onPress={onClose}>
                                        Action
                                    </Button>
                                </ModalFooter>
                            </form>
                        </>
                    )}
                </ModalContent>
            </Modal>
        </>
    );
};

export default AdminCalendar;
