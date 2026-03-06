import type { Metadata } from "next";
import EventsClient from "@/components/EventsClient";

export const metadata: Metadata = {
    title: "Events & Workshops | Mumbai Women Coders",
    description: "Discover all past and upcoming technical events, meetups, workshops, and hackathons hosted by our community.",
};

export default function EventsPage() {
    return <EventsClient />;
}
