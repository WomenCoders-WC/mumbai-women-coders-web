export interface UpcomingEvent {
    id: string;
    image: string;
    imageAlt: string;
    badge?: string;
    dateDay: string;
    dateMonth: string;
    title: string;
    locationShort: string;
    locationFull: string;
    eventType: string;
    eventFormat: string;
    eventIcon: string;
    registrationLink: string;
}

export const upcomingEvents: UpcomingEvent[] = [
    {
        id: "1",
        image: "/assets/images/events/mwc-8-3-26.jpg",
        imageAlt: "International Women's Day Celebration",
        badge: "Mumbai Chapter",
        dateDay: "8",
        dateMonth: "MARCH",
        title: "International Women's Day Celebration",
        locationShort: "Mumbai",
        locationFull: "ITM Institute of Design and Media, Andheri (W),Mumbai",
        eventType: "Community Event",
        eventFormat: "In-Person",
        eventIcon: "fa-laptop",
        registrationLink: "https://luma.com/kta9xsx4?utm_content=latest_event&utm_medium=direct&utm_source=website"
    },
    {
        id: "2",
        image: "/assets/images/events/mwc-8-3/mwc-8-3-26.jpg",
        imageAlt: "SheBuilds on Lovable x International Women's Day(Mumbai)",
        badge: "Mumbai Chapter",
        dateDay: "8",
        dateMonth: "MARCH",
        title: "SheBuilds on Lovable x International Women's Day(Mumbai)",
        locationShort: "Mumbai",
        locationFull: "ITM Institute of Design and Media, Andheri (W),Mumbai",
        eventType: "Buildathon",
        eventFormat: "In-Person",
        eventIcon: "fa-laptop",
        registrationLink: "https://luma.com/mxykzefr?utm_content=latest_event&utm_medium=direct&utm_source=website"
    }
];
