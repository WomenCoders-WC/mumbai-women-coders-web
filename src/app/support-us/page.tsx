import type { Metadata } from "next";
import SupportUsClient from "@/components/SupportUsClient";

export const metadata: Metadata = {
    title: "Support Us | Mumbai Women Coders",
    description: "By supporting Women Coders, you're not just funding a community; you're investing in the next generation of technical leaders and innovators.",
};

export default function SupportUsPage() {
    return <SupportUsClient />;
}
