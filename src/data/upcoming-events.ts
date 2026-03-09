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

];
