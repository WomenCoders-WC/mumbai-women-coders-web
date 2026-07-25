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
    // {
    //     id: "1",
    //     image: "/assets/images/events/mwc-25-7.jpeg",
    //     imageAlt: "One Prompt Is Not Enough - MWC",
    //     badge: "Mumbai Chapter",
    //     dateDay: "25",
    //     dateMonth: "JULY",
    //     title: "Mumbai Women Coders Presents: One Prompt Is Not Enough",
    //     locationShort: "Mumbai",
    //     locationFull: "ATLAS SkillTech University, Mumbai",
    //     eventType: "Community Event",
    //     eventFormat: "In-Person",
    //     eventIcon: "fa-laptop",
    //     registrationLink: "https://luma.com/rpjnqwjz"
    // },
];
